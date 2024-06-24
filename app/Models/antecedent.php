namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'antecedant_medical', 'antecedant_chirurgicaux'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
