<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


trait A
{
    function aaa()
    {
        return "this is aaaTrait Function";
    }
}
trait B
{
    function bbb()
    {
        return "This is bbbTrail Function";
    }
}
// class ABtraitClass
// {
//     use A;
//     use B;
// }




// class TestClass
// {
//     function ppp()
//     {
//         return "this is ppp function";
//     }
// }


class AdminController extends Controller
{

    use A;
    use B;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "This is admin Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
        echo $this->aaa();
        ?>
            <br>
            <br>
        <?php
        echo $this->bbb();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
