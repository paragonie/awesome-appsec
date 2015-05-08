# Contributing to this List

This README file is dynamically generated from the `data/` directory.

To add to this list, please clone the repository then follow the following steps:

1. Create a new JSON file with the desired information. Feel free to refer to 
   the [template](template/full.json).
   
   The following fields are required:
    * `name`
    * `remark`
    * `url`
   
   Any directories you create will be used to define the structure of your new
   links.
   
   Please try not to make things too messy. We will clean up the list from time
   to time.
   
2. Run `src/compiler.php`
3. Commit your changes, send a pull request.

See `src/compiler.php` for more information.