<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dealer;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class dealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //view dealer form
        return view('dealerForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store Dealer into database
        $request->validate([
            'company'=>'required',
            'name'=>'required',
            'area'=>'required',
            'phone'=>'required',
            'image'=>'required',
        ]);
        $dealer = new Dealer;
        $dealer->company = $request['company'];
        $dealer->name = $request['name'];
        $dealer->area = $request['area'];
        $dealer->phone = $request['phone'];

        //Image save
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/dealers/', $filename);
            $dealer->image = $filename;
        }
        else
        {
            return $request;
            $dealer->image = '';
        }
        $dealer->save();

        $notification = array(
            'message' => 'Dealer insertaded Successfully',
            'alert-type' => 'success'
        );

        return redirect('/dealerForm')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editDealer = Dealer::findOrFail($id);
        return view("editDealer", ['data'=>$editDealer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uDealer(Request $request, $id)
    {
        //
        $updateDealer = Dealer::findOrfail($id);

        $updateDealer->company = $request->input('company');
        $updateDealer->name = $request->input('name');
        $updateDealer->area = $request->input('area');

        if($request->hasFile('image'))
        {
            $destination = 'uploads/dealers/'.$updateDealer->image;
//            if (Fill::exits($destination)){
//                Fill::delete($destination);
//            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/dealers/', $filename);
            $updateDealer->image = $filename;
        }

        $updateDealer->update();

        $notification = array(
            'message' => 'Dealer Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect('/')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dDelete($id)
    {
        $image = Dealer::findOrfail($id);
        $old_image = 'uploads/dealers/'. $image->image;
        unlink($old_image);

        Dealer::findOrfail($id)->delete();
        return redirect()->back()->with('status', 'Dealer Deleted successfully');
    }





}