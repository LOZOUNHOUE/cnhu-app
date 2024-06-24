namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParametreVitaux extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'neurologique_conscience', 'sensibilite', 'motricite', 'muqueuse', 'temperature', 
        'hemodynamique_pressionArterielle', 'pouls', 'etat', 'coloration', 'sueur', 'frissons', 
        'respiration_type', 'frequence', 'saturation', 'dyspnee', 'tirage', 'balancement', 'bruits', 'autre'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
