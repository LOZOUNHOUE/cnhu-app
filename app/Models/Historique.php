namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'histoire', 'examenClinique', 'premiereHypotheseDiagnostique'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
