<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Twilio\Rest\Client;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    /**
     * @throws \Exception
     */
    public function generateOtp(): void
    {
        $newToken = random_int(10000, 99999);

        OtpToken::query()->create([
            'token' => $newToken,
            'user_id' => Auth::user()->id
        ]);

        $receiverNumber = Auth::user()->phone;
        $message = 'Doğrulama Kodu: '. $newToken;

        try{
            $accountSid = getenv("TWILIO_SID");
            $authToken = getenv("TWILIO_TOKEN");
            $twilioNumber = getenv("TWILIO_FROM");
            $client = new Client($accountSid, $authToken);
            $client->messages->create($receiverNumber, [
                'from' => $twilioNumber,
                'body' => $message,
                'to' => $receiverNumber
            ]);
        }catch (\Throwable $throwable){
            report($throwable);
            info($throwable);
        }
    }
}
