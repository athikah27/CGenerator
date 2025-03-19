use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('certificate_id');
            $table->timestamp('verified_at')->default(now());
            $table->string('verified_by');
            $table->timestamps();

            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('verifications');
    }
};
