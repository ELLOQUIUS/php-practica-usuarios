   
        <table border="1">
            <thead>
                <tr>
                    <th>Reporte de usuario</th>
                </tr>
            </thead>    
            <tbody>
                <tr>
                    <td>Cedula:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="number"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td>
                        <input type="radio" name="sexo" value="hombre">Hombre <br>
                        <input type="radio" name="sexo" value="mujer">Mujer
                    </td>
                </tr>
                <tr>
                    <td>Nacionalidad:</td>
                    <td>
                        <select id="opciones" name="opciones">
                            <option value="Venezolano">Venezolano</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button>Registrar</button>
                    </td>
                    <td>
                        <button>Limpiar</button>
                    </td>
                </tr>
            </tbody>
        </table>
