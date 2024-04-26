<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\DTO\offreDTO;
use App\Models\Offre;
use App\Models\Bricole;
use Illuminate\Support\Facades\Auth;
use App\Repositories\OffreRepositoryInterface;
use Illuminate\Notifications\Messages\VonageMessage;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;


/**
 * Class OffreRepository.
 */
class OffreRepository  implements OffreRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Offre $model
     */
    // public function __construct(Offre $model)
    // {
    //     parent::__construct($model);
    // }


    public function store(offreDTO $offreDTO,Bricole $bricole){
        $data = $this->getArr($offreDTO);
        $data += [
            'bricole_id' => $bricole->id,
            'freelancer_id' => Auth::user()->freelancers()->first()->id,
        ];

        Offre::create($data);
        return true;
    }

    private function getArr(offreDTO $offreDTO){
        return [
            'message' => $offreDTO->message,
            'prix' => $offreDTO->prix,
        ];
    }

    public function update(Offre $offre)
    {

        $basic  = new \Vonage\Client\Credentials\Basic("551bc032", "Fj7626D1meGY0cXi");
        $client = new \Vonage\Client($basic);
        // $this->toVonage($offre->freelancer->user);


        $guzzleClient = new \GuzzleHttp\Client([
            'verify' => storage_path('cacert.pem'),
        ]);

        $client->setHttpClient($guzzleClient);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("212688025523
", 'Khadamati', 'A text message sent using the Nexmo SMS API')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            // echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }

        $offre = Offre::find($offre->id);
        $offre->confirmation = 1;
        $offre->save();
        return true;
    }

    private function toVonage(User $user): VonageMessage
    {
        return (new VonageMessage)
            ->clientReference((string) $user->id)
            ->content('Your SMS message content');
    }
}
