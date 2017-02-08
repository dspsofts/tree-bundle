DspSoftsTreeBundle
=========================

[![Latest Version](https://img.shields.io/github/release/dspsofts/tree-bundle.svg?style=flat-square)](https://github.com/dspsofts/tree-bundle/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/dspsofts/tree-bundle/master.svg?style=flat-square)](https://travis-ci.org/dspsofts/tree-bundle)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/dspsofts/tree-bundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/dspsofts/tree-bundle/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/dspsofts/tree-bundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/dspsofts/tree-bundle)

The DspSoftsTreeBundle provides a new type for using JsTree.


Installation
------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require dspsofts/tree-bundle
```

This command requires you to have Composer installed globally, as explained
in the `installation chapter`_ of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding the following line in the ``app/AppKernel.php``
file of your project:

```php
// app/AppKernel.php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new DspSofts\TreeBundle\DspSoftsTreeBundle(),
        );
        // ...
    }
    // ...
}
```

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

```
Resources/meta/LICENSE
```
