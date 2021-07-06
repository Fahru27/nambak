<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;

use Session;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        Session::flash('Sukses', 'Pegawai Berhasil Ditambahkan');

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/admin';
    }
}
