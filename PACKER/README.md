# How to build a box with the provided files FAQ

The first step is to create a folder structure inside a directory that would contain your packer template and all relevant files.

Screenshot → https://prnt.sc/w6jfc9

-Http (folder for your preseed.cfg file).

-Output (folder for your template output).

-Scripts (this one is self explanatory).

-Iso (if you have the OS image locally and do not want to waste time downloading it, additionally different packer templates may vary).

The above structure is needed in order for packer to work without errors.

Once that is done you need to navigate to the parent directory and run the needed packer commands for the build to initiate.
 
# Commands 
To validate the packer template before building it(saves time)

packer validate <template.json>

To build after no errors have been spoted in the previous step

packer build <template.json>


If the build goes without any errors it should output a .box file which then can be added to vagrant for further manipulation.

vagrant box add --name <packer-template-output.box>

After that a directory should be dedicated to the new vagrant machine that is going to be brought up with the newly created packer vagrant box.
A vagrantfile should be present, to create one.

vagrant init

Once this is done an empty vagrantfile is created, which then can be further modified to setup a machine from the packer vagrant box.

When the vagrantfile is finished.

vagrant up

This would bring up a virtual machine based on the box you've selected in your vagrantfile.

At this point you can do whatever you want with the created vagrant machine.
