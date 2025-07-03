# Consultor DNI-RUC

Aplicación web para consultar DNI/RUC usando la API de Factiliza.
## Requisitos
- PHP 8.2+
- Composer
- token de Factiliza
- Laravel 12


## 📸 Capturas de Pantalla

<h3>Formulario de Consulta</h3>
<img src="https://i.ibb.co/Fq33JzsF/Captura-de-pantalla-2025-07-03-184355.png" 
     alt="Formulario" 
     style="max-width: 400px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);" />
<p><em>Interfaz de búsqueda</em></p>

<h3>Resultados DNI</h3>
<img src="https://i.ibb.co/Lz8Q3Cyh/Captura-de-pantalla-2025-07-03-184334.png" 
     alt="Resultado DNI" 
     style="max-width: 400px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);" />
<p><em>interfaz de respuesta</em></p>


## Configuracion
1. agregar el token de Factiliza en el archivo `.env`:
```
FACTILIZA_API_URL="https://api.factiliza.com/v1"
FACTILIZA_API_TOKEN="tu_token_aqui"
```
   - Puedes obtener un token registrándote en [Factiliza](https://factiliza.com/).


2. configurar endpoints en config/services.php:
```php
'factiliza' => [
        'base_url' => env('FACTILIZA_API_URL'),
        'token' => env('FACTILIZA_API_TOKEN'),
        'endpoints' => [
            'dni' => '/dni/info/',
            'ruc' => '/ruc/info/'
        ]
    ]
```



