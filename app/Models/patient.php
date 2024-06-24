namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'adresse', 'telephone', 'dateNaissance', 'age', 'sexe', 'ref', 'profession', 
        'nbEnfant', 'pob', 'maladieNaturelle', 'lieuReponse', 'personneAReevoir', 'dateHeureArriveCUAU', 
        'transportPar', 'provenance', 'accompagne'
    ];

    public function antecedents()
    {
        return $this->hasMany(Antecedent::class);
    }

    public function actesChirurgicals()
    {
        return $this->hasMany(ActeChirurgical::class);
    }

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }

    public function orientations()
    {
        return $this->hasMany(Orientation::class);
    }

    public function fichesMedicalesAdmissions()
    {
        return $this->hasMany(FicheMedicaleAdmission::class);
    }

    public function parametresVitaux()
    {
        return $this->hasMany(ParametreVitaux::class);
    }

    public function soinsUrgents()
    {
        return $this->hasMany(SoinsUrgents::class);
    }

    public function examensParacliniques()
    {
        return $this->hasMany(ExamensParacliniques::class);
    }

    public function facteursDeRisque()
    {
        return $this->hasMany(FacteurDeRisque::class);
    }

    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }

    public function conclusionsDiagnostiques()
    {
        return $this->hasMany(ConclusionDiagnostique::class);
    }
}
