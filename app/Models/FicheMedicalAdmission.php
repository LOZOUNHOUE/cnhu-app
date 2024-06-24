namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheMedicaleAdmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'numeroDossier', 'date', 'heureArrive'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
