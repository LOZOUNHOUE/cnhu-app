namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConclusionDiagnostique extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'conclusion', 'diagnostic'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
