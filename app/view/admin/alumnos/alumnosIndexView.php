<div>
    <h1>Administracion de alumnos</h1>
    <p>
        en esta seccion vamos a mostrar la lista de alumnos y vamos 
        a administrarlos
    </p>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut libero, harum vel animi odio eaque at fuga quaerat odit quidem sed aperiam vitae cumque rerum officiis autem dicta a officia?
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis perspiciatis placeat minima, veniam sint, aliquam cum in dolor voluptatibus quia amet dicta eum quod facilis odit modi labore. Numquam, tempore!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem amet laboriosam dolore voluptatibus obcaecati illo vero omnis vitae officia, similique iusto, optio error, quibusdam enim commodi quis beatae quaerat sit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos adipisci illo magnam, sunt blanditiis odit quae. Delectus adipisci, eligendi eius ea asperiores corporis est repellendus cumque mollitia, similique earum enim?
    </p>

    <h3><a href="http://localhost/php-3c?C=alumnoController&M=callInsertForm">Insertar nuevo alumno</a></h3>

    <table border="1">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Edad</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $dato){
                    echo "<tr>";
                    echo "<td>". $dato['nombre'] ."</td>";
                    echo "<td>". $dato['apellido'] ."</td>";
                    echo "<td>". $dato['edad'] ."</td>";
                    echo "<td>". $dato['correo_electronico'] ."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>