namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'externe', 'miseSEnObservation', 'transferHopitalisation', 'chirurgie', 
        'medecine', 'pediatrie', 'autre', 'decesAvantArrive', 'dateHeureSortieCUAU'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
