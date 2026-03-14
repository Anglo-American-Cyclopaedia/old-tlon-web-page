<?php namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Mail;
use Storage;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct()
  {
    $locale = session()->get('locale', \Config::get('app.locale'));
    session(['locale' => $locale]);
  }

  public function setLocale($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {
      session(['locale' => $locale]);
      App::setLocale($locale);
    } else {
      session(['locale' => 'es']);
      App::setLocale('es');
    }

    return redirect()->back();
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $members = Storage::disk('local')->get('json/members.json');
    $members = json_decode($members, true);
    return view('pages.home', ['data' => $members]);
  }

  public function aboutMission()
  {
    return view('pages.about.mission');
  }

  public function aboutHistory()
  {
    return view('pages.about.history');
  }

  public function aboutStory()
  {
    return view('pages.about.story');
  }

  public function tlonProjectAbout()
  {
    return view('pages.project.about');
  }

  public function tlonProjectGeneral()
  {
    return view('pages.project.general');
  }

  public function tlonProjectSocial()
  {
    return view('pages.project.social');
  }

  public function tlonProjectProjects()
  {
    $projects = [
      'adhoc' => [
        ['title' => 'Proyecto de Conformación de redes ad hoc en Dispositivos embebidos', 'author' => 'Estudiantes Pregrado y Posgrado'],
        ['title' => 'Proyecto Clusters en Redes Ad Hoc', 'author' => 'Estudiante de Maestría Jhon López Velasco'],
        ['title' => 'Seguridad en redes Ad Hoc', 'author' => 'Estudiante de Maestría Manuel Molano'],
        ['title' => 'Redes ad hoc y sensores', 'author' => 'Estudiante de pregrado Esteban Ramírez'],
        ['title' => 'Toma de decisiones en Redes Ad hoc', 'author' => 'Estudiante de Maestría John Edward Ortiz']
      ],
      'virtualization' => [
        ['title' => 'Abstracción de Recursos Procesamiento, Memoria, Almacenamiento y dispositivos E/S', 'author' => 'Estudiante de Doctorado Henry Zárate Ceballos'],
        ['title' => 'Procesamiento distribuido', 'author' => 'Estudiante de Maestría Juan Sebastián Triana'],
        ['title' => 'Administración de Espectro Distribuido', 'author' => 'Estudiante de Maestría Oscar Rueda'],
        ['title' => 'Descubrimiento de Recursos Distribuidos', 'author' => 'Estudiante de Maestría German Álvarez- Estudiantes de pregrado Camilo Carrillo y Rodrigo Espinel']
      ]
    ];
    return view('pages.project.projects', ['projects' => $projects]);
  }

  public function produccionIntelectual()
  {
    $articles = Storage::disk('local')->get('json/articles.json');
    $articles = json_decode($articles, true);

    usort($articles, function($a, $b) {
      return strcmp($a['panel'], $b['panel']);
    });

    $articles = array_reverse($articles);

    return view('pages.production', ['articles' => $articles]);
  }

  public function actividadesDocencia()
  {
    return view('pages.activities.docencia');
  }

  public function actividadesInvestigacion()
  {
    return view('pages.activities.investigacion');
  }

  public function actividadesSemilleroUqbar()
  {
    $members = [
      ['name' => 'Albert Yarid Perez Cardenas', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Alejandro Sebastian Alejo Patarroyo', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Andrés Fernando Román', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Antonio Jose Suarez Fortich', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Camilo Vargas Romero', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Cristian Camilo Aguilera Polanco', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Daniel Fernando Castañeda Torres', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Ivan Rene Delgado Gonzalez', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Juan Sebastian Paez Arroyo', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Nicolás Gómez Gutiérrez', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Samael De jesus Salcedo Amortegui', 'program' => 'activities-uqbar.career-systems-engineering'],
      ['name' => 'Sebastian Felipe Delgado Pérez', 'program' => 'activities-uqbar.career-systems-engineering']
    ];
    return view('pages.activities.uqbar', ['members' => $members]);
  }

  public function actividadesExtension()
  {
    $courses = Storage::disk('local')->get('json/courses-extension.json');
    $courses = json_decode($courses, true)['courses'];

    return view('pages.activities.extension', ['activities' => $courses]);
  }

  public function actividadesOtras()
  {
    return view('pages.activities.otras');
  }

  public function getContacto()
  {
    return view('pages.contact');
  }

  public function postContacto(Request $request)
  {
    $data = $request->all();

    Mail::send('emails.message', $data, function ($message) use ($request) {
      $message->from($request->email, $request->name);
      $message->subject($request->subject);

      $message->to(env('CONTACT_EMAIL'), env('CONTACT_NAME'));
    });

    return view('pages.contact', ['message' => 'contact.send-success']);
  }
}
