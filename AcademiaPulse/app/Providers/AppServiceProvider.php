<?php

namespace App\Providers;


use App\Repositories\ClassRepository;
use App\Repositories\ExamRepository;
use App\Repositories\ParentRepository;
use App\Repositories\PaRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\SubjectToClasseRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\TeacherToClasseRepository;
use App\Repositories\TimeTableRepository;
use App\RepositoriesInterfaces\ClasseRepositoryInterface;
use App\RepositoriesInterfaces\ExamRepositoryInterface;
use App\RepositoriesInterfaces\ParentRepositoryInterface;
use App\RepositoriesInterfaces\PaRepositoryInterface;
use App\RepositoriesInterfaces\StudentRepositoryInterface;
use App\RepositoriesInterfaces\SubjectsRepositoryInterface;
use App\RepositoriesInterfaces\SubjectToClasseRepositoryInterface;
use App\RepositoriesInterfaces\TeacherRepositoryInterface;
use App\RepositoriesInterfaces\TeacherToClasseRepositoryInterface;
use App\RepositoriesInterfaces\TimeTableRepositoryInterface;
use App\ServiceInterfaces\ClasseServiceInterface;
use App\ServiceInterfaces\ExamServiceInterface;
use App\ServiceInterfaces\ParentServiceInterface;
use App\ServiceInterfaces\PaServiceInterface;
use App\ServiceInterfaces\StudentServiceInterface;
use App\ServiceInterfaces\SubjectServiceInterface;
use App\ServiceInterfaces\SubjectToClasseServiceInterface;
use App\ServiceInterfaces\TeacherServiceInterface;
use App\ServiceInterfaces\TeacherToClasseServiceInterface;
use App\ServiceInterfaces\TimeTableServiceInterface;
use App\Services\ClasseService;
use App\Services\ExamService;
use App\Services\ParentService;
use App\Services\PaService;
use App\Services\StudentService;
use App\Services\SubjectService;
use App\Services\SubjectToClasseService;
use App\Services\TeacherService;
use App\Services\TeacherToClasseService;
use App\Services\TimeTableService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    private array $repositories = [
        ParentRepositoryInterface::class => ParentRepository::class,
        StudentRepositoryInterface::class => StudentRepository::class,
        PaRepositoryInterface::class => PaRepository::class,
        SubjectsRepositoryInterface::class => SubjectRepository::class,
        SubjectToClasseRepositoryInterface::class => SubjectToClasseRepository::class,
        ClasseRepositoryInterface::class => ClassRepository::class,
        ExamRepositoryInterface::class => ExamRepository::class,
        TeacherRepositoryInterface::class => TeacherRepository::class,
        TeacherToClasseRepositoryInterface::class => TeacherToClasseRepository::class,
        TimeTableRepositoryInterface::class => TimeTableRepository::class,
        
    ];
    
    
    private array $services = [
        ParentServiceInterface::class => ParentService::class,
        StudentServiceInterface::class => StudentService::class,
        PaServiceInterface::class => PaService::class,
        SubjectServiceInterface::class => SubjectService::class,
        SubjectToClasseServiceInterface::class => SubjectToClasseService::class,
        ClasseServiceInterface::class => ClasseService::class,
        ExamServiceInterface::class => ExamService::class,
        TeacherServiceInterface::class => TeacherService::class,
        TeacherToClasseServiceInterface::class => TeacherToClasseService::class,
        TimeTableServiceInterface::class => TimeTableService::class,
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(App\RepositoriesInterfaces\ParentRepositoryInterface::class, App\Repositories\ParentRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\StudentRepositoryInterface::class, App\Repositories\StudentRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\PaRepositoryInterface::class, App\Repositories\PaRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\SubjectRepositoryInterface::class, App\Repositories\SubjectRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\SubjectToClasseRepositoryInterface::class, App\Repositories\SubjectToClasseRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\ClasseRepositoryInterface::class, App\Repositories\ClasseRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\ExamRepositoryInterface::class, App\Repositories\ExamRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\TeacherRepositoryInterface::class, App\Repositories\TeacherRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\TeacherToClasseRepositoryInterface::class, App\Repositories\TeacherToClasseRepository::class);
        // $this->app->bind(App\RepositoriesInterfaces\TimeTableRepositoryInterface::class, App\Repositories\TimeTableRepository::class);
        // $this->app->bind(App\ServiceInterfaces\ParentServiceInterface::class, App\Services\ParentService::class);
        // $this->app->bind(App\ServiceInterfaces\StudentServiceInterface::class, App\Services\StudentService::class);
        // $this->app->bind(App\ServiceInterfaces\PaServiceInterface::class, App\Services\PaService::class);
        // $this->app->bind(App\ServiceInterfaces\SubjectServiceInterface::class, App\Services\SubjectService::class);
        // $this->app->bind(App\ServiceInterfaces\SubjectToClasseServiceInterface::class, App\Services\SubjectToClasseService::class);
        // $this->app->bind(App\ServiceInterfaces\ClasseServiceInterface::class, App\Services\ClasseService::class);
        // $this->app->bind(App\ServiceInterfaces\ExamServiceInterface::class, App\Services\ExamService::class);
        // $this->app->bind(App\ServiceInterfaces\TeacherServiceInterface::class, App\Services\TeacherService::class);
        // $this->app->bind(App\ServiceInterfaces\TeacherToClasseServiceInterface::class, App\Services\TeacherToClasseService::class);
        // $this->app->bind(App\ServiceInterfaces\TimeTableRepositoryInterface::class, App\Services\TimeTableRepository::class);
        
        // $this->app->bind(paRepositoryInterface::class, PaRepository::class);
        // $this->app->bind(parentService::class, function ($app) {
        //     return new parentService($app->make(paRepositoryInterface::class));
        // });
 
 
        // $this->app->bind(TimeTableRepositoryInterface::class, TimeTableRepository::class);
        // $this->app->bind(timeTableService::class, function ($app) {
        //     return new timeTableService($app->make(TimeTableRepositoryInterface::class));
        // });
         


        // $this->app->bind(parentRepositoryInterface::class, parentRepository::class);
        // $this->app->bind(parentService::class, function ($app) {
        //     return new parentService($app->make(parentRepositoryInterface::class));
        // });

        // $this->app->bind(teacherRepositoryInterface::class, teacherRepository::class);
        // $this->app->bind(teacherService::class, function ($app) {
        //     return new teacherService($app->make(teacherRepositoryInterface::class));
        // });

        // $this->app->bind(studentRepositoryInterface::class, studentRepository::class);
        // $this->app->bind(studentService::class, function ($app) {
        //     return new studentService($app->make(studentRepositoryInterface::class));
        // });

        // $this->app->bind(subjectsRepositoryInterface::class, subjectRepository::class);   
        // $this->app->bind(subjectService::class, function ($app) {
        //     return new subjectService($app->make(subjectsRepositoryInterface::class));
        // });


        // $this->app->bind(classeRepositoryInterface::class, classRepository::class);
        // $this->app->bind(classeService::class, function ($app) {
        //     return new classeService($app->make(classeRepositoryInterface::class));
        // });

        // $this->app->bind(examRepositoryInterface::class, examRepository::class);   
        // $this->app->bind(examService::class, function ($app) {
        //     return new examService($app->make(examRepositoryInterface::class));
        // });

        // $this->app->bind(subjectToClasseRepositoryInterface::class, subjectToClasseRepository::class); 
        // $this->app->bind(subjectToClasseService::class, function ($app) {
        //     return new subjectToClasseService($app->make(subjectToClasseRepositoryInterface::class));
        // });

        // $this->app->bind(teacherToClasseRepositoryInterface::class, teacherToClasseRepository::class);
        // $this->app->bind(teacherToClasseService::class, function ($app) {
        //     return new teacherToClasseService($app->make(teacherToClasseRepositoryInterface::class));
        // });
        foreach($this->repositories as $interface => $implementation){
            $this->app->bind($interface, $implementation);
        }
        foreach($this->services as $interface => $implementation){
            $this->app->bind($interface, $implementation);
        }
        
        
     }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
