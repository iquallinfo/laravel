<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class HotelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
           $hotels = DB::table('hotels')->get();
            $data = array(
                "hotelslist" => $hotels,
            );
        return view('hotelslist')->with($data);
	}
        
        
        public function comments($id)
	{
            
		$hotel = DB::table('hotels')->where('id', $id)->first();;
                $comments = DB::table('comments')->join('users', 'users.id', '=', 'comments.userid')->select('comments.*','users.name')->where('comments.hotelid', $id)->get();
                $data = array(
                     "hotel" => $hotel,
                     "comments" => $comments
                 );
            return view('commentlist')->with($data);
	}
    public function viewcomments($id=NULL)
	{
            if (Auth::check()) {
			//print_r($cars);
			$user = Auth::User();
				$hotel = DB::table('hotels')->where('id', $id)->first();;
			    $comments = DB::table('comments')->join('users', 'users.id', '=', 'comments.userid')->select('comments.*','users.name')->where('comments.hotelid', $id)->get();
				$data = array(
					"hotel" => $hotel,
					"comments" => $comments
				);
				return view('addcomments')->with($data);
			}
			else
			{
				return redirect('auth/login');
			}
         
	}
        
        public function addcomments(Request $request)
	{
	    $hotel = $request->input('hotelid');
            $comments = $request->input('comments');
            $user = Auth::User();
            $data =array(
                'hotelid' => $hotel,
                'userid' => $user["id"],
                'comments'  => $comments,
             );
            DB::table('comments')->insert([$data]);
            return redirect('/');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
	    $hotel = $request->input('name');
            $city = $request->input('city');
            $data =array(
                    'name'  => $hotel,
                    'city'  =>  $city,
             );
            DB::table('hotels')->insert([$data]);
            return redirect('/');
	}
        
        

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::check()) {
                //print_r($cars);
                $user = Auth::User();
                if($user["id"] != 1)
                {
                    return redirect('/');
                }
                return view('addhotel');
                }
                else
                {
                    return redirect('auth/login');
                }
	}

        
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}
        
        

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
