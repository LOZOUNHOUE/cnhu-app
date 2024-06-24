namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoinsUrgents extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'gestesTechniques_abordVeineux', 'oxygene', 'ventilation', 'sondeVessie', 
        'intubation', 'membres', 'platre', 'transfusion', 'perfusions', 'autres'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
