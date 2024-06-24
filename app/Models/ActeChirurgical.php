namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeChirurgical extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'decisionPrisePar', 'heure', 'blocOperatoire', 'typeIntervention'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
