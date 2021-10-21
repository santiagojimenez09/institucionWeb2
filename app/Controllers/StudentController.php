<?php 
    namespace App\Controllers;
    use CodeIgniter\Controller;
    // invocar el modelo a utilizar con sus métodos
    use App\Models\StudentModel;

    class StudentController extends Controller{
        public function index(){
            // recuperar los registros de la tabla student - instanciar el objeto 
            $student = new StudentModel();
            $data['students'] = $student->getStudent(); // se genera el arreglo students
            //invocar la vista con el array $data
            echo view('StudentList',$data);
        }

        function add_new(){
            echo view('StudentCreate'); // vista studentcreate
        }

        function create(){
           // Validar la información desde el servidor 
           helper(['form','url']);
           $val = $this->validate([
               'document' => ["label" => "Documento de identidad","rules" => "required|min_length[6]|max_length[15]"],
               'name' => ["label" =>"Nombre","rules" => "required|min_length[2]|max_length[50]"],
               'email' => ["label" =>"Correo electronico","rules" => "required|valid_email"],
               'password' => ["label" =>"Contraseña","rules" => "required|min_length[2]|max_length[10]"]
               
           ]);
           // Instanciar el modelo de StudentModel
           $model = new StudentModel();
           if (!$val){
                //invocar el formulario con los posibles errores
                echo view("StudentCreate",[
                    'validation' => $this->validator
                ]);
           }
           else{
               // Enviar los datos al modelo, es decir, invocar el método para guardar
               $model->save([
                   'document' => $this->request->getVar('document'),
                   'name' => $this->request->getVar('name'),
                   'email' => $this->request->getVar('email'),
                   'password' => $this->request->getVar('password')
               ]);
               // redireccionar al método index de StudentController
               return redirect()->to(base_url('/index.php/StudentController'));
           }
        }

        function edit($id){
            $model = new StudentModel();
            $data['student']=$model->getStudent($id)->getRow();
            echo view('StudentEdit',$data);
        }

        function update(){
            $model = new StudentModel();
            $id = $this->request->getPost('id');
            $data = array(
                'document' => $this->request->getPost('document'),
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            );
            $model->updateStudent($data,$id);
            return redirect()->to(base_url('/index.php/StudentController'));
        }

        function delete($id){
            $model = new StudentModel();
            $model->deleteStudent($id);
            return redirect()->to(base_url('/index.php/StudentController'));
        }

        
    }
