namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipeAccueil extends Model
{
    use HasFactory;

    protected $fillable = [
        'chirurgien', 'medecin', 'infirmier', 'ide', 'as'
    ];
}
