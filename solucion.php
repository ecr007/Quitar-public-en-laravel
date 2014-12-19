# 1.- Copiar tu aplicación a la raíz del hosting, quedarás con las típicas carpetas de Laravel: app, bootstrap, public, vendor y los demás archivos
# 2.- Mover todo el contenido de 'public' a la raíz y eliminar esa carpeta, o si quieres dejarla, da igual
# 3.- Ahora en la raíz tendrás tu archivo index.php que debes editar así:
# Más código ...

// Original
require __DIR__.'/../bootstrap/autoload.php';
// Como debe quedar
require __DIR__.'/bootstrap/autoload.php';

# Más código ...

// Original
$app = require_once __DIR__.'/../bootstrap/start.php';
// Como debe quedar
$app = require_once __DIR__.'/bootstrap/start.php';

# Más código ...
# 4.- En la carpeta 'bootstrap' editar el archivo paths.php así:
# Más código ...

// Original
'public' => __DIR__.'/../public',
// Como debe quedar
'public' => __DIR__.'/',

# Más código ...
# 5.- Probar
