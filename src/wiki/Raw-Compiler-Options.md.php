The commonly used compiler options and equations are mapped to the parameters of the plugin.
However, the compiler also has some advanced options and equations that you may find in the
Excelsior JET User's Guide, plus some troubleshooting settings that the Excelsior JET Support
team may suggest you to use.

You may enumerate such options using the <?php param('compilerOptions'); ?> configuration, for instance:

<?php if (MAVEN) : ?>
```xml
<compilerOptions>
  <compilerOption>-disablestacktrace+</compilerOption>
  <compilerOption>-inlinetolimit=200</compilerOption>
</compilerOptions>
```
<?php elseif (GRADLE) : ?>
```gradle
compilerOptions = ["-disablestacktrace+", "-inlinetolimit=200"]
```
<?php endif; ?>

These options will be appended to the Excelsior JET project file generated by the plugin.

**Notice:** Care must be taken when using this configuration to avoid conflicts
with other project parameters.

