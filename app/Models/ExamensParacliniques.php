namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamensParacliniques extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'radiologie', 'echographie', 'biologie', 'ECG', 'autres'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
