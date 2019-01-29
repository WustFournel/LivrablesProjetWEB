<?php  
namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Users extends Model implements Authenticatable
{

use BasicAuthenticatable;



 protected $fillable = ['mail','nom','prenom','rank','centre','password'];




    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }


}
