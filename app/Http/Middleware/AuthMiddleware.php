<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // day la ham cua middleware check login
    public function handle(Request $request, Closure $next)
    {
        /**
         * - Sau khi login, thông tin user sẽ được lưu ở session('user)
         * - Chỉ cần check nếu session('user) không tồn tại hoặc không có thông tin thì coi như là chưa đăng nhập
         */
        // kiểm tra session('user') khong tồn tại thì sẽ cho chuyển huong về route('login')
        try {
            if(session('user')) {
                return $next($request);
            } else {
                return redirect('tai-khoan');
            }
    
            // next này, là khi mình muốn cho nó di qua cái middleware này, và di tới hàm tiếp theo (middleware tiếp theo, hàm của controller)
            
        } catch (\Throwable $th) {
            return response($th);
        }
    }

    
}
