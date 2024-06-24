namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacteurDeRisque extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'alcool', 'tabac', 'obesite'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
