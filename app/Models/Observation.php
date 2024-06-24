namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'redigePar', 'date', 'heure', 'responsable'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
