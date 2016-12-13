<?php

namespace App\Notifications\Member;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RegisterSucceed extends Notification
{
    use Queueable;

    public $user;

    public $namaBank = 'Bank Kotan';

    public $nomorRekening = '123123123';

    public $pemegangRekening = 'JodohSyari.Com';

    public $jumlahTransfer = 'Rp. 200.000';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
        // return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Registrasi Berhasil')
                    ->line('Anda telah terdaftar di JodohSyari.Com.')
                    ->line('Silakan melakukan pembayaran ke rekening berikut untuk mendapatkan rekomendasi calon pendamping')
                    ->line($this->namaBank.' acc. '.$this->nomorRekening.' a.n '.$this->pemegangRekening)
                    ->line('Jumlah yang harus ditransfer: '.$this->jumlahTransfer)
                    ->line('Setelah melakukan transfer silakan lakukan konfirmasi di halaman berikut: http://www.jodohsyari.com/konfirmasi-pembayaran')
                    ->action('Lihat Profil Saya', 'http://www.jodohsyari.com/me');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'subject' => 'Pendaftaran Berhasil',
            'message' => 'Anda telah terdaftar di JodohSyari.Com. Silakan lakukan pembayaran ke '.$this->namaBank.' acc. '.$this->nomorRekening.' a.n '.$this->pemegangRekening.' sejumlah '.$this->jumlahTransfer.' untuk mendapatkan rekomendasi calon pendamping',
            'url' => '/user/me'
        ];
    }
}
