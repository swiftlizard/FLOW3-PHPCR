FLOW3-PHPCR
===========

This Repository contains components for PHPCR, Doctrine.ODM.PHPCR, Jackalope to use with Jackrabit ported as Packages for FLOW3.
You will need all 4 of them to properly setup FLOW3 with Jackrabbit via Doctrine.ODM.PHPCR.

The Packages Doctrine.ODM.PHPCR, PHPCR and Jackalope will provide you with the framework needed to work with the PHPCR layer for Jackrabbit,
SwiftLizard.PHPCR will provide you with the CLI Commands ported from Symfony2 CLI to FLOW3 CLI, as well as some examples.

# General Information

The PHPCR layer packages for Flow3 unfortunately will work only with Unix systems at the moment, because they are setup with symbolic links
for minimal maintenance effort when it comes to updates of the orinal sources provided here on github.

To work with PHPCR and Jackrabbit you need libxml2 2.7.x compiled into your php, due to a bug in 2.6 .

# Documentation

## Introduction

You will find the original sources used to build each FLOW3-Package within the Resources/PHP folder of each Package provided.
The <VendorNamespace.Package>/Classes folder is a symbolic link to the main sources folder of each package component, you might also
find the sources of subcomponents, required for a package to work, provided as a symbolic link with in main sources folder of a component.

The packages were build this way due to the structure needed by the autoloader of FLOW3, wich requires the classes to be located
in "<VendorNamespace.Package>/Classes" in order to find for instance SwiftLizard/PHPCR/Command/PHPCRCommandController.

The Package.php, required by FLOW3 to recognize a package within the framework, is also located in <VendorNamespace.Package>/Resources/PHP
and only linked from <VendorNamespace.Package>/Classes via symbolic link to the original sources.

This way I tried to keep the effort for updating these packages as minimal as possible, because only the links would have to be updated.

## Package Compontents List

### Doctrine.ODM.PHPCR
* [doctrine/phpcr-odm](https://github.com/doctrine/phpcr-odm)

### Jackalope
* [jackalope] (https://github.com/jackalope/jackalope)
* [jackalope-jackrabbit] (https://github.com/jackalope/jackalope-jackrabbit)

### PHPCR
* [PHPCR] (https://github.com/phpcr/phpcr)
* [phpcr-utils] (https://github.com/phpcr/phpcr-utils)

## Setup

I tried to make setting up PHPCR with Jackrabbit for FLOW3 as easy as possible.
For a test run just clone the content of this repository to <FLOW3Installation>/Packages/Application or <FLOW3Installation>/Packages/Framework.

Then open commandline and run the following commands:

* ./flow3 flow3:cache:flush , this will flush the cache
* ./flow3 phpcr:jackrabbit , this will start the jackrabbit server on http://localhost:8080, the jackrabbit-standalone-2.4.1.jar is located in SwiftLizard.PHPCR/Resources/Java/JackRabbitServer
* ./flow3 phpcr:register_phpcr_ns_in_jackrabbit --workspace default, this will register the node types required by phpcr in jackrabbit default workspace

Now you are good to go.

To see what CLI commands are provided at the moment just call "./flow3 help" and look for phpcr.
To see what options each command provides just call "./flow3 help <command>" (e.g. ./flow3 help phpcr:jackrabbit)

# ToDo

* integrate [jackalope-doctrine-dbal](https://github.com/jackalope/jackalope-doctrine-dbal) into Jackalope Package
* integrate [jackalope-jackrabbit-meter](https://github.com/jackalope/jackalope-jackrabbit-meter) into Jackalope Package
* integrate [jackrabbit-importexport](https://github.com/jackalope/jackrabbit-importexport) into Jackalope Package
* integrate example controller domain/phpcrRepository and domain/phpcrDocuments into SwiftLizard.PHPCR Package

