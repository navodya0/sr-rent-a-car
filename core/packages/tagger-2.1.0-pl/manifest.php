<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => 'Tagger
======
*Tags, Categories, and More for MODX!*

A robust and performant tag management system. Summary of the many, many features:

1. Tested with up to a million tags 
2. Paginated drop-down and type-ahead for easy tag input
3. Combo-box or tag-field input types
4. Optionally remove unused tags from the database automatically
5. Optionally restrict tag creation to the CMP, versus on input
6. Optionally use Auto-Tag cloud for input

Display and list: all tags, tags from specified group(s), omit unused tags, Resources with a given tag, etc. Supplies getResources with a &where condition, so that all the templating and sorting abilities of getResources are at your fingertips. 

## Installation

Install via Package Management, or download the package from the [MODX Extras repository](http://modx.com/extras/)

## Basic Usage

### TaggerGetTags

This Snippet allows you to list tags for resource(s), group(s) and all tags

**PROPERTIES:**

&resources    Comma separated list of resources for which will be listed Tags

&groups       Comma separated list of Tagger Groups for which will be listed Tags

&rowTpl       Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered

&outTpl       Name of a chunk that will be used for wrapping all tags. If no chunk is given, tags will be rendered without a wrapper

&separator    String separator, that will be used for separating Tags

&target       An ID of a resource that will be used for generating URI for a Tag. If no ID is given, current Resource ID will be used

&showUnused   If set to 1, Tags that are not assigned to any Resource will be included to the output as well

**OUTPUT PLACEHOLDERS AND EXAMPLE VALUES:**

[[+id]] => 1

[[+tag]] => News

[[+group]] => 3

[[+group_id]] => 3

[[+group_name]] => Media Type

[[+group_field_type]] => tagger-combo-tag

[[+group_allow_new]] => 0

[[+group_remove_unused]] => 0

[[+group_allow_blank]] => 1

[[+group_allow_type]] => 0

[[+group_show_autotag]] => 0

[[+group_show_for_templates]] => 21

[[+cnt]] => 1

[[+uri]]

**EXAMPLE USAGE:**

```[[TaggerGetTags? &showUnused=`1`]]```

```[[TaggerGetTags? &groups=`1,3` &rowTpl=`tag_links_tpl`]]```

### TaggerGetResourcesWhere

This snippet generate SQL Query that can be used in WHERE condition in getResources snippet

**PROPERTIES:**

&tags       Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded

&groups     Comma separated list of Tagger Groups. Only from those groups will Tags be allowed

&where      Original getResources where property. If you used where property in your current getResources call, move it here

**EXAMPLE USAGE:**

```[[!getResources? &where=`[[!TaggerGetResourcesWhere? &tags=`Books,Vehicles` &where=`{"isfolder": 0}`]]`]]```

## Documentation

Learn more about Tagger in the [Official Documentation](http://rtfm.modx.com/extras/revo/tagger).

## License

Tagger is GPL2. For the full copyright and license information, please view the license.txt file that was distributed with this source code, under /core/components/tagger/docs/.
',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'changelog' => 'Changelog for Tagger.

Tagger 2.1.0
==============
- Fix adding tags from multiple pages
- Add &groupTpl to TaggerGetTags
- Add &matchAll=2 to TaggerGetResourcesWhere

Tagger 2.0.0
==============
- Add support for Revolution 3.0.0
- Remove group placement above/under content

Tagger 1.12.0
==============
- Add 404 handler for invalid tags. 

Tagger 1.11.0
==============
- Move the Gateway handler from OnHandleRequest to OnPageNotFound
- Fix FURL issue with Revo >= 2.7.0

Tagger 1.10.0
==============
- Add URI to TaggerGetCurrentTag snippet
- Add linkOneTagPerGroup option to TaggerGetTags
- Add option to include current tags in TaggerGetTags url
- Add Tag Label for frontend usage
- Add scheme override to TaggerGetTags properties
- Add an option (through system settings) to preserve accent characters in tag/group alias

Tagger 1.9.0
==============
- Add noActiveTags placeholder to the outTpl of TaggerGetTags snippet
- If TV tab is not present, add all Tagger groups to Tagger tab
- Add ability to show Tagger only for specific contexts 
- Remove accent chars from tag\'s & group\'s alias
- Fix adding tags from field
- Add ability to sort tags in manager by rank or alias
- Add sample translation to custom lexicon
- Fix assign from field when tag limit is set
- Fix alphabetic sorting of tags
- Add As Radio option to the Tagger Group
- Fix updating hidden textfield

Tagger 1.8.0
==============
- Sort tags by tag asc in the form
- Sort tags by tag asc when suggesting them
- Fix TaggerGetRelatedWhere to pass alias instead of tag
- Add TaggerGetCurrentTag snippet
- Add active placeholder to TaggerGetTags rowTpl to identify currently active tag
- Add parent option to TaggerGetTags
- RU lexicons (credits goes to mvoevodskiy)
- Fix deleting multiple tags at once
- Decode HTML entities when setting value
- Include script properties to TaggerGetTags chunks

Tagger 1.7.0
==============
- Match group by alias or name in TaggerGetResourcesWhere
- Add TaggerGetRelatedWhere snippet
- Class for each plugin event
- Hide tag limit field for combo box input
- Fix gateway for index page
- Load values for Tagger fields under TVs properly
- Add field option to TaggerGetResourcesWhere
- New styles for Revolution 2.3
- Added @INLINE support in TaggerGetTags tpls params
- Added &weight parameter to TaggerGetTags
- Fixed matchAll parameter in TaggerGetResourcesWhere

Tagger 1.6.0
==============
- Added friendlyURL option to TaggerGetTags
- Added matchAll option to TaggerGetResourcesWhere

Tagger 1.5.1
==============
- Fixed compatibility with PHP 5.2

Tagger 1.5.0
==============
- Added option to translate Tagger groups
- Added system settings for changing place\'s labels
- Added an option to place a group as a tab into TVs section
- Added option &wrapIfEmpty

Tagger 1.4.0
==============
- Updated french translations
- Fixed gateway to support all file extensions
- Made combobox for tags 100% width
- Put form labels to top
- Added lexicon string for Tagger\'s tab
- Updated styles to look better in 2.3
- Added tagField to GetResourcesWhere snippet
- Added sort param to GetTags snippet
- Added Group description
- Changed labelSeparator
- Fixed notice in GetTags snippet
- Fixed logging messages from plugin
- Updated GetResourcesWhere snippet and removed tag_key init

Tagger 1.3.1
==============
- Fixed autotag styles in Revolution 2.3
- Fixed tag\'s styles inside tag field in Revolution 2.3

Tagger 1.3.0
==============
- Fixed bug that removed all assigned tags on second resource\'s save
- Added alias field to groups
- Added alias field to tags
- Added option to limit number of selected tags
- Added option to use LIKE in query in TaggerGetResourcesWhere snippet
- Fixed tag count when using showDeleted = 0 or showUnpublished = 0
- Added an option to hide input field when auto tag is showed
- Added limit, offset, totalPh, tpl_N properties to TaggerGetTags snippet
- Fixed gateway redirecting to URL ended with a comma

Tagger 1.2.0
==============
- Added merge selected Tags
- Added remove selected Tags
- Fixed IndexManagerController
- Added options showDeleted and showUnpublished to snippet getTags
- Fixed getResourcesWhere to not return null when no tags are provided

Tagger 1.1.0
==============
- Added toPlaceholder property to getTags snippet
- Duplicate Tags also for children
- Improved gateway
- Added handler for onResourceDuplicate event, that copies Tags (only for the Resource, not for children)
- Added contexts property to TaggerGetTags snippet

Tagger 1.0.2
==============
- Replaced calling shorthand PHP array [] with default array()

Tagger 1.0.1
==============
- Fixed default value for &target in TaggerGetTags
- Added descriptions to add/update group window
- Fixed &group property in TaggerGetTags snippet

Tagger 1.0.0
==============
- Added ability to show assigned resources for selected tag from Tag grid
- Added system settings to show/hide header of group places
- Added option to select place where to render Tagger Group
- Added import button to Tagger Group grid
- Added drag & drop groups reorder
- Added position to Tagger group

Tagger 0.4.1
==============
- Fixed group add dialog

Tagger 0.4.0
==============
- Added snippets properties
- Translated system settings
- Improved Snippets documentation
- Added autotag option for groups that have field type set to Tag field
- Fixed updating tags from manager
- Added PHP documentation to xPDO classes
- Added an option to show only used tags in TaggerGetTags
- Added Allow type option to groups
- Added trigger button to the tagger field

Tagger 0.3.0
==============
- Added url placeholder into TaggerGetTags row tpl
- Added gateway for handling friendly URL with tags
- Added snippet for creating WHERE query that can be used in getResources
- Removed snippet for listing resources by tags

Tagger 0.2.0
==============
- Fixed removing tags after quick save
- Fixed removing old tag - resource relations
- Fixed removing unused tags
- Added snippet for listing resources by tags
- Added snippet for listing tags

Tagger 0.1.0
==============
- Updated schema - added indexes, removed ID from TaggerTagResource
- Speed improvements in retrieving tags
- Added groups options: field_type, allow_new, remove_unused and allow_blank
- Added combobox for tags
- Added tag field
- Added sorting option to tag and group grids
- Tag management
- Group management
- Initial release.
',
    'requires' => 
    array (
      'modx' => '>=3.0.0-alpha',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modNamespace',
      'guid' => '4cca2b88f2c8cc6fd51aaa46df9252b4',
      'native_key' => 'tagger',
      'filename' => 'MODX/Revolution/modNamespace/d418d237a53bca66e50e484d749ca170.vehicle',
    ),
    1 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '01d8abac2990e5342d9ae88df40772d4',
      'native_key' => 'tagger.place_above_content_header',
      'filename' => 'MODX/Revolution/modSystemSetting/a8fa0282897fb273fe542f65b6e41f1b.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '2f51ec24b7164e19521a5999959521b6',
      'native_key' => 'tagger.place_below_content_header',
      'filename' => 'MODX/Revolution/modSystemSetting/3e7a6347c716075d5d284c43e93ae1c0.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '2c539296c02c0525a5dda5f2cfb45cec',
      'native_key' => 'tagger.place_bottom_page_header',
      'filename' => 'MODX/Revolution/modSystemSetting/095b42a14c593c98c289613e610853f2.vehicle',
    ),
    4 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => 'db880b5aed564ab1933bc68c0e2eade1',
      'native_key' => 'tagger.place_in_tab_label',
      'filename' => 'MODX/Revolution/modSystemSetting/52794c532c8ad10542641b8280cfb190.vehicle',
    ),
    5 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '894fdd8b445990a62cd3747a0c1ce0a5',
      'native_key' => 'tagger.place_tvs_tab_label',
      'filename' => 'MODX/Revolution/modSystemSetting/c8c6090fec6b6a04c18c66e79faf2eca.vehicle',
    ),
    6 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '9f77a29597f41c94185292a92c5e4300',
      'native_key' => 'tagger.place_above_content_label',
      'filename' => 'MODX/Revolution/modSystemSetting/a7903fd6f977c1b896644ab20fff9868.vehicle',
    ),
    7 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => 'd6ed034a3bde1235de27ee70a7c5908f',
      'native_key' => 'tagger.place_below_content_label',
      'filename' => 'MODX/Revolution/modSystemSetting/24086027afe6eb760854903a3e77dff9.vehicle',
    ),
    8 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => 'd4524cf900f0fba4b0caf47e099e6de4',
      'native_key' => 'tagger.place_bottom_page_label',
      'filename' => 'MODX/Revolution/modSystemSetting/594bbc536888bb861f44fec214e51e91.vehicle',
    ),
    9 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => 'ef625e944f95e353cf1909d7e3c80696',
      'native_key' => 'tagger.remove_accents_tag',
      'filename' => 'MODX/Revolution/modSystemSetting/c39c95706804efff440d937ab57c491d.vehicle',
    ),
    10 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '889d1e970a2cf6e718d206e1b26fa44f',
      'native_key' => 'tagger.remove_accents_group',
      'filename' => 'MODX/Revolution/modSystemSetting/d59cbb5759ca8de802c4e7286cc3df4b.vehicle',
    ),
    11 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'guid' => '755dbe27125c13b9c85d9466d8442bc5',
      'native_key' => '755dbe27125c13b9c85d9466d8442bc5',
      'filename' => 'xPDO/Transport/xPDOScriptVehicle/447db98c1ba7bfa2b3181d76717f2958.vehicle',
    ),
    12 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modMenu',
      'guid' => '910ed70df3bafa97c3e07a9cffc09111',
      'native_key' => 'tagger.menu.tagger',
      'filename' => 'MODX/Revolution/modMenu/bb34b0916feb2422cb7ec8d9027a99b5.vehicle',
    ),
    13 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'guid' => '8a30bae3ed1af71e3ce1302179726bbe',
      'native_key' => '8a30bae3ed1af71e3ce1302179726bbe',
      'filename' => 'xPDO/Transport/xPDOScriptVehicle/b9ce2efc646170333684d427aab44668.vehicle',
    ),
    14 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'guid' => '37691419be83c4c2f33f7a043e4f9568',
      'native_key' => '37691419be83c4c2f33f7a043e4f9568',
      'filename' => 'xPDO/Transport/xPDOScriptVehicle/4c82b6d1e7eaf537fd03b49c2fa53c17.vehicle',
    ),
    15 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modCategory',
      'guid' => '19565285634740b54765c5ca10fca1e5',
      'native_key' => NULL,
      'filename' => 'MODX/Revolution/modCategory/178147416d15adb85ba0c7c1b9789fde.vehicle',
    ),
    16 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'class' => 'xPDO\\Transport\\xPDOScriptVehicle',
      'guid' => '97e89479ad3b98cae2f32099e30e7ace',
      'native_key' => '97e89479ad3b98cae2f32099e30e7ace',
      'filename' => 'xPDO/Transport/xPDOScriptVehicle/30b7a1637bd1723d4855f77f94fa1acf.vehicle',
    ),
  ),
);