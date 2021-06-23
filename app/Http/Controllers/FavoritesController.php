<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * micropostをfavoriteするアクション。
     *
     * @param  $id  micropostのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのmicropostをfavoriteする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * micropostをunfavoriteするアクション。
     *
     * @param  $id  micropostのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのmicropostをunfavoriteする
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
