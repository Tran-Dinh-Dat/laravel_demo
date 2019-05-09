<?php
use App\Tasks;
use App\Rhppost; // import model vào
use Illuminate\Http\Request; // Dùng để nhận request từ form

use Illuminate\Support\Facades\DB; // Dùng để thực hiện truy vấn Query
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// view all tasks
Route::get('/', function () {
    $tasks = Tasks::orderBy('created_at','desc')->get();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});
// thêm tasks mới 

Route::post('/tasks', function (Request $request) {
    // validation form
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if($validator->fails()) {
        return redirect('/')
                ->withInput()
                ->withErrors($validator);
    };
    $task = new Tasks; // Tạo đối tượng Tasks từ model
    $task->name = $request->name; // khi bấm submit form sẽ gửi request.name
    $task->save(); //lưu database
    return redirect('/'); // về thư mục gốc
});
// xóa tasks theo id tasks
Route::delete('/tasks/{id}', function ($id) {
    Tasks::findOrFail($id)->delete();
    return redirect('/');
});

// Route phần RHP
Route::get('RHP', 'RHPController@index');
Route::get('RHP/about/{name}', 'RHPController@about');
Route::get('RHP/create', 'RHPController@create');

//Route phần Crud Query
Route::get('crudq/insert', function() {
    // DB::table('rhpposts')->insert([
    //     ['name' => 'Tran Dinh Dat'],
    //     ['age' => 21],
    //     ['email' => 'trandinhdat120@gmail.com'],
    //     ['role' => 1],
    //     ['url' => 'fb/dinhdat74']
    // ]);
    DB::insert('insert into rhpposts (name, age, email, role, url) values (?, ?, ?, ?, ?)', 
    ['Tran Dinh Dat', 21, 'trandinhdat120@gmail.com', 1, 'fb/dinhdat74']);
    return 'insert thành công!';
});
Route::get('crudq/delete', function() {
    DB::table('rhpposts')->where('id', '>', 1)->delete();
});
Route::get('crudq/read', function() {
    $result = DB::select('select * from rhpposts where id >?', [1]);
   
    foreach ($result as  $value) {
        echo $value->name . '</br>';
        echo $value->email . '</br>';
        echo $value->age . '</br>';
    }
});
Route::get('crudq/update', function() {
   DB::update('update rhpposts set age = 11 where id = ?', [3]);
   return 'Update thành công!';
});

// Eloquent_ORM
// get all date in database
Route::get('crudorm/', function() {
    $posts = Rhppost::all();
    foreach ($posts as $post) {
        echo $post->name . ' ' . $post->age .'<br>'; 
    }
});
// find by id
Route::get('crudorm/find', function() {
    $post = Rhppost::find(3);
    echo $post->name . ' ' . $post->age .'<br>';   
});
//use where to find
Route::get('crudorm/where', function() {
    $posts = Rhppost::where('id', '>' ,4)   ->take(10) // Lấy ra 10 bản ghi
                                            ->orderBy('id', 'desc') // Sắp xếp id theo thứ tự giảm dần
                                            ->get(); // thực thi
    foreach ($posts as $value) {
        echo $value->id .' '.$value->name .'</br>';
    }
});