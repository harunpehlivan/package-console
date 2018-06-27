<h2>ZN Framework Console Package</h2>
<p>
Follow the steps below for installation and use.
</p>

<h3>Installation</h3>
<p>
You only need to run the following code for the installation.
</p>

```
composer require znframework/package-image
```

<h3>Documentation</h3>
<p>
Click for <a href="https://docs.znframework.com/yerel-servisler/konsol-komutlari">documentation</a> of your library.
</p>

<h3>Usage Steps</h3>
<p>
<ul>
<li>Move to the root directory of the "zerocore" file in the package.</li>
<li>Change the name of the zeroneed.php file in the "zerocore" file to index.php.</li>
<li>Edit the contents of the index.php file as follows.</li>
</ul>
</p>

```php
<?php require 'vendor/autoload.php';

ZN\ZN::run();
```
<p>After the steps above, you can use commands from the console.</p>
```bash
php zerocore command-list
```