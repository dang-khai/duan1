<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Orders;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->Product = new Product();
        $this->Category = new Category();
        $this->Order = new Orders();
    }
    public function home()
    {
        return view('admin.pages.home');
    }
    public function orders()
    {
        $orders = Orders::all();
        $index = 1;
        return view('admin.pages.order', compact('orders', 'index'));
    }
    public function customers()
    {
        return view('admin.pages.customer');
    }
    public function showProductDetails($slug, $id)
    {
        $product = Product::find($id);
        $images = Image::where('id_product', $product->id)->get();
        $cate = Category::where('id', $product->id_cate)->get('name_cate');
        $pro_id = $product->id;
        return view('users.pages.product-detail', compact('pro_id', 'product', 'images', 'cate'));
    }
    public function postOrder(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'sdt' => 'required',
            'address' => 'required',
        ];
        $messages = [
            'name.required' => 'Phải nhập họ tên',
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email không đúng định dạng',
            'sdt.required' => 'Phải nhập số điện thoại',
            'address.required' => 'Phải nhập địa chỉ',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('toast_error', 'Đặt hàng không thành công')
                ->withInput();
        }

        DB::table('orders')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->sdt,
            'address' => $request->address,
            'note' => $request->note,
            'id_user' => $request->user_id,
            'id_product' => $request->product_id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Bạn đã đặt hàng thành công. Hãy hoàn thành việc chuyển khoản đặt cọc để hoàn thành thủ tục');
    }

    public function update($id)
    {
        $order = Orders::find($id);
        $order->status = '1';
        // $order->updated_at = new \DateTime();
        $order->save();
        return redirect()->route('orders')->with('toast_success', 'Cập nhật status thành công');
    }
    public function delete($id)
    {
        $order = Orders::find($id);
        $order->delete();
        return redirect()->route('orders')->with('toast_success', 'Xóa orders thành công');
    }
}
