<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
      return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }

    public function hasRole($roles)
    {
        if (is_array($roles)) {
            foreach($roles as $need_role) {
                if($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
    
   

    public function userRole($roles)
    {
        if(is_array(roles))
        {
            foreach($roles as $need_role)
            {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
                else
                {
                    return $this->checjIfUserHasRole($roles);
                }
                return false;
            }
        }
    }

    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role) == strtolower($this->role->name)) ? true : null;
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail); // mail template
    }

    protected static function booted()
    {
        // We will automatically add the user to the post when it's saved.
        static::creating(function ($news) {
            if (auth()->user()) {
                $news->user_id = auth()->id();
            }
        });
    }

   

}
