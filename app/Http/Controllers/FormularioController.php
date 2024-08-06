<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Auth;
use App\Models\Result; // Asegúrate de importar el modelo

class FormularioController extends Controller
{
    public function index(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'num_si' => 'required|integer',
            'num_no' => 'required|integer',
            'porcentaje_si' => 'required|string',
            'productos_total1' => 'required|integer',
            'productos_si1' => 'required|integer',
            'productos_no1' => 'required|integer',
            'productos_suma1' => 'required|integer',
            'conocimientos_total1' => 'required|integer',
            'conocimientos_si1' => 'required|integer',
            'conocimientos_no1' => 'required|integer',
            'conocimientos_suma1' => 'required|integer',
            'actitudes_total1' => 'required|integer',
            'actitudes_si1' => 'required|integer',
            'actitudes_no1' => 'required|integer',
            'actitudes_suma1' => 'required|integer',
            'productos_total2' => 'required|integer',
            'productos_si2' => 'required|integer',
            'productos_no2' => 'required|integer',
            'productos_suma2' => 'required|integer',
            'conocimientos_total2' => 'required|integer',
            'conocimientos_si2' => 'required|integer',
            'conocimientos_no2' => 'required|integer',
            'conocimientos_suma2' => 'required|integer',
            'productos_total3' => 'required|integer',
            'productos_si3' => 'required|integer',
            'productos_no3' => 'required|integer',
            'productos_suma3' => 'required|integer',
            'recomendacion' => 'required|string',
            'current_date' => 'required|date',
            'decision' => 'required|string',



        ]);

        $user = Auth::user();
          // Guardar en la base de datos
    Result::create([
        'user_id' => $user->id, // Guarda el ID del usuario autenticado
        'porcentaje_si' => $validatedData['porcentaje_si'],
        'recomendacion' => $validatedData['recomendacion'],
        'decision' => $validatedData['decision'],
        'fecha' => $validatedData['current_date'], // Guardar la fecha actual
        'estandar' => 'EC0301', // Valor por defecto
        'estado' => '1', // Valor por defecto

    ]);

        try {
            // Crear una instancia de TemplateProcessor
            $templateProcessor = new TemplateProcessor('documento-test.docx');
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Error al cargar la plantilla: ' . $e->getMessage()]);
        }

        // Iterar sobre las preguntas y establecer los valores
        for ($i = 1; $i <= 145; $i++) {
            $question = $request->input("q{$i}", 'no'); // Obtener el valor de cada pregunta, 'no' por defecto
            $templateProcessor->setValue("pregunta{$i}", $this->ensureValue($question)); // Establecer el valor en la plantilla
        }

        // Agregar datos del usuario a la plantilla
        $this->setUserData($templateProcessor, $user);

        // Establecer los valores de productos, conocimientos y actitudes
        $this->setCategoryValues($templateProcessor, $validatedData);

        $templateProcessor->setValue('currentDate', $this->ensureValue($validatedData['current_date']));

        // Obtener y establecer el porcentaje calculado
        $templateProcessor->setValue('numSi', $this->ensureValue($validatedData['num_si']));
        $templateProcessor->setValue('numNo', $this->ensureValue($validatedData['num_no']));
        $templateProcessor->setValue('porcentajeSi', $this->ensureValue($validatedData['porcentaje_si']));
        $templateProcessor->setValue('recomendacion', $this->ensureValue($validatedData['recomendacion']));
        $templateProcessor->setValue('decision', $this->ensureValue($validatedData['decision']));

        // Establecer el valor de decisión en la plantilla


        // Generar un nombre de archivo único
        $filename = 'Autodiagnostico_' . $user->name . '_' . $user->paternalSurname . '.docx';

        // Guardar el documento modificado
        try {
            $templateProcessor->saveAs($filename);
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Error al guardar el documento: ' . $e->getMessage()]);
        }

        // Descargar el documento generado
        return response()->download($filename)->deleteFileAfterSend(true);
    }

    private function setUserData($templateProcessor, $user)
    {
        $templateProcessor->setValue('user', $this->ensureValue($user->name));
        $templateProcessor->setValue('email', $this->ensureValue($user->email));
        $templateProcessor->setValue('secondName', $this->ensureValue($user->secondName));
        $templateProcessor->setValue('paternalSurname', $this->ensureValue($user->paternalSurname));
        $templateProcessor->setValue('maternalSurname', $this->ensureValue($user->maternalSurname));
        $templateProcessor->setValue('phone', $this->ensureValue($user->phone));
        $templateProcessor->setValue('calle_avenida', $this->ensureValue($user->calle_avenida));
        $templateProcessor->setValue('numext', $this->ensureValue($user->numext));
        $templateProcessor->setValue('curp', $this->ensureValue($user->curp));
    }

    private function setCategoryValues($templateProcessor, $data)
    {
        $templateProcessor->setValue('productosTotal1', $this->ensureValue($data['productos_total1']));
        $templateProcessor->setValue('productosSi1', $this->ensureValue($data['productos_si1']));
        $templateProcessor->setValue('productosNo1', $this->ensureValue($data['productos_no1']));
        $templateProcessor->setValue('productosSuma1', $this->ensureValue($data['productos_suma1']));

        $templateProcessor->setValue('conocimientosTotal1', $this->ensureValue($data['conocimientos_total1']));
        $templateProcessor->setValue('conocimientosSi1', $this->ensureValue($data['conocimientos_si1']));
        $templateProcessor->setValue('conocimientosNo1', $this->ensureValue($data['conocimientos_no1']));
        $templateProcessor->setValue('conocimientosSuma1', $this->ensureValue($data['conocimientos_suma1']));

        $templateProcessor->setValue('actitudesTotal1', $this->ensureValue($data['actitudes_total1']));
        $templateProcessor->setValue('actitudesSi1', $this->ensureValue($data['actitudes_si1']));
        $templateProcessor->setValue('actitudesNo1', $this->ensureValue($data['actitudes_no1']));
        $templateProcessor->setValue('actitudesSuma1', $this->ensureValue($data['actitudes_suma1']));

        $templateProcessor->setValue('productosTotal2', $this->ensureValue($data['productos_total2']));
        $templateProcessor->setValue('productosSi2', $this->ensureValue($data['productos_si2']));
        $templateProcessor->setValue('productosNo2', $this->ensureValue($data['productos_no2']));
        $templateProcessor->setValue('productosSuma2', $this->ensureValue($data['productos_suma2']));

        $templateProcessor->setValue('conocimientosTotal2', $this->ensureValue($data['conocimientos_total2']));
        $templateProcessor->setValue('conocimientosSi2', $this->ensureValue($data['conocimientos_si2']));
        $templateProcessor->setValue('conocimientosNo2', $this->ensureValue($data['conocimientos_no2']));
        $templateProcessor->setValue('conocimientosSuma2', $this->ensureValue($data['conocimientos_suma2']));

        $templateProcessor->setValue('productosTotal3', $this->ensureValue($data['productos_total3']));
        $templateProcessor->setValue('productosSi3', $this->ensureValue($data['productos_si3']));
        $templateProcessor->setValue('productosNo3', $this->ensureValue($data['productos_no3']));
        $templateProcessor->setValue('productosSuma3', $this->ensureValue($data['productos_suma3']));
    }

    private function ensureValue($value)
    {
        return ($value === null || $value === '' || $value === 0) ? '0' : (string)$value;

    }

}
