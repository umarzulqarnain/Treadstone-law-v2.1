<?php

namespace App\Http\Controllers;

use App\FileDocuments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $ref_file = $request->get('ref_file');
        $type = $request->get('type');
        $status = $request->get('status');
        $instructions = $request->get('instructions');

        if($file = $request->file('file')){

            $fileName = $type.'_'.date('Y-m-d-H-i-s'). '_'. $file->getClientOriginalName();
            $fileTitle = $file->getClientOriginalName();
            $file->move(public_path('uploads/FileDocuments'),$fileName);

            if($type=="CLOSING_PACKAGE" || $type=="CLOSING_PACKAGE_EXE" || $type=="SIGNING_PACKAGE"|| $type=="SIGNING_PACKAGE_EXE"  ||$status=="requested"){
                $fileTitle = $request->get('title');
            }

            if(FileDocuments::create([

                'title'=>  ucwords(strtolower($fileTitle))  ,
                'doc'=>$fileName ,
                'instructions'=>$instructions ,
                'status'=>$status ,
                'type'=>$type ,
                'ref_file'=>$ref_file ,

            ])){

                return response()->json(['success'=>$fileName]);

            }else{

                echo 'Error';
            }

        }

        else{

            if($type=="CLOSING_PACKAGE" || $type=="SIGNING_PACKAGE"|| $status=="requested"){
                $fileTitle = $request->get('title');
            }

            if(FileDocuments::create([

                'title'=>  ucwords(strtolower($fileTitle))  ,
                'instructions'=>$instructions ,
                'status'=>$status ,
                'doc'=>'' ,
                'type'=>$type ,
                'ref_file'=>$ref_file ,

            ])){

                return redirect()->back();

            }else{

                echo 'Error';
            }

        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FileDocuments  $fileDocuments
     * @return \Illuminate\Http\Response
     */
    public function show(FileDocuments $fileDocuments)
    {
        //
    }

    public function download($path)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/FileDocuments/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileDocuments  $fileDocuments
     * @return \Illuminate\Http\Response
     */
    public function edit(FileDocuments $fileDocuments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileDocuments  $fileDocuments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){


        $status = $request->get('status');

        $currentDoc = FileDocuments::find($id);

        if($status == "approved"){

            if(FileDocuments::where('id', $id)->update([

                'comment'=>$request->get('comment'),
                'status'=>$status,

            ])){

                return redirect()->back();
            }
            else{

                echo 'Error';
            }

        }

        elseif ($status == "rejected"){

            if(FileDocuments::where('id', $id)->update([

                'comment'=>$request->get('comment'),
                'status'=>$status,

            ])){

                if(FileDocuments::create([

                    'title'=>  ucwords(strtolower($currentDoc->title))  ,
                    'instructions'=>$currentDoc->instructions ,
                    'status'=>'requested' ,
                    'doc'=> $currentDoc->doc ,
                    'type'=> $currentDoc->type ,
                    'ref_file'=>$currentDoc->ref_file ,

                ])){

                    return redirect()->back();

                }else{

                    echo 'Error';
                }

            }
            else{

                echo 'Error';
            }

        }



    }

    public function updateWithFile(Request $request, $id){


        if($file = $request->file('file')){

            $fileName = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/FileDocuments'),$fileName);

            if(FileDocuments::where('id' , $id)->update([

                'doc'=>$fileName ,
                'status'=>'pending' ,

            ])){


                return redirect()->back();

            }else{

                echo 'Error';

            }

        }else{


            echo 'Error';
        }



    }

    public function updateWithFileTwo(Request $request, $id){

        if($file = $request->file('file')){

            $fileName = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/FileDocuments'),$fileName);

            if(FileDocuments::where('id' , $id)->update([

                'doc_two'=>$fileName ,
                'status'=>'pending' ,

            ])){


                return redirect()->back();

            }else{

                echo 'Error';

            }

        }
        else{

            echo 'Error';
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileDocuments  $fileDocuments
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(FileDocuments::where('id' , $id)->delete()){

            return redirect()->back();
        }else{

            echo 'Error While Deleting the file !';
        }
    }

    public function delete_two($id)
    {
        if(FileDocuments::where('id' , $id)->update(['doc_two'=>'' , 'status'=>'requested' ])){

            return redirect()->back();
        }else{

            echo 'Error While Deleting the file !';
        }
    }
}
