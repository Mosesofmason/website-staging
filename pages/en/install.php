<h2>Install Freenet</h2> 
<p>
To install Freenet might not be as difficult as you might have heard. There are two ways to install Freenet:</p>

<ul>
<li>Graphical install</li>
<li>Headless install</li>
</ul>

<p>If you want to install the Freenet software on a computer which lacks a GUI, see the <a href="#headless">Headless install</a> below. 
Otherwise, continue reading.</p>

<h4>Graphical install</h4>

<p>For a graphical installation you have to have:</p>
<ul>
<li>A working Java Runtime Environment,</li>
<li>a downloaded copy of <a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar" alt="new_installer.jar">
http://downloads.freenetproject.org/alpha/installer/new_installer.jar</a> and</li>
<li>a working graphical user interface (GUI)</li>
</ul>
<p>You should save the new_installer.jar file somewhere were you can find it again. Your home-directory should be a good place. The next
step requires you to know where you stored the file (the path to it), so it is quite important that you do that step thouroghly.</p>

<p>To start the installation, open a command line interface/terminal/shell window. Exchange the <span style="font-weight:bold;">
/path/to</span> to the real path (for example: /home/username/download/new_installer.jar) to the new_installer.jar-file and type:</p>
<pre>$ java -jar /path/to/new_installer.jar</pre>

<p>The first window you should see is the one below, which allows you to select your preferred language for the installation program.</p>

<img src="/image/install/1-langselect.png"/>
<p>Next is shown an about-box, some information about the version of Freenet and authors. Just click <span style="font-weight:bold;">
Next</span> to proceed.</p>
<img src="/image/install/2-about.png"/><br/><br/><br/>
<p>Then comes the License Agreement to the GNU General Public License. After you've read the text, click 
<span style="font-weight:bold;">I accept the terms of this license agreement</span> and press <span style="font-weight:bold;">Next
</span>.</p>

<img src="/image/install/3-acceptLicense.png"/><br/><br/><br/>

<p>The next step is to choose the directory in which to install Freenet. The default location on Linux operating systems is 
<span style="font-weight:bold;">/home/username/Freenet</span> as shown below. Change it to something appropriate or leave &quot;as is&quot;.
Click <span style="font-weight:bold;">Next</span> when you are finished.</p>
<img src="/image/install/4-Install_directory.png"/><br/><br/><br/>

<p>Select the packages that you want to install with your Freenet software. Since it takes up virtually no extra disk-space, it is
recommended that you leave all packages selected and press <span style="font-weight:bold;">Next</span>.</p>
<img src="/image/install/5-select_packages.png"/><br/><br/><br/>

<p>In the next stage, the packages are installed, and a progress meter runs across the window. When it is finished, press 
<span style="font-weight:bold;">Next</span> to continue to the next step.</p>
<img src="/image/install/6-Install_packages.png"/><br/><br/><br/>

<p>After that, the Freenet software is installed and/or upgraded, plugins are enabled and the environment is started. When completed,
press <span style="font-weight:bold;">Next</span> to proceed.</p>
<img src="/image/install/7-install_progress.png"/><br/><br/><br/>

<p>For some graphical environments, shortcuts in the menu-structure can be created. This is not the case for all of the platforms that
Freenet run on. However, there should be created shortcuts on the desktop in all supported environments. Change the application group 
according to your needs and press <span style="font-weight:bold;">Next</span> when finished.</p>
<img src="/image/install/8-create_shortcuts.png"/><br/><br/><br/>

<p>After that, the installation is finished. Click <span style="font-weight:bold;">Done</span> to close the window.</p>
<img src="/image/install/9-Install_finished.png"/><br/><br/><br/>

<p>If all has gone well, a browser window should have opened in the background, showing the following page:</p>
<img src="/image/install/10-Successful_installation.png"/>
<p>It is a page showing a number of ways to proceed with your Freenet quest. Among other things, it shows how you could go about 
exchanging node references to add peer-nodes to yours, in order to communicate on Freenet. But more on that later.</p>
<br/><br/><br/>

<p>Clicking the <span style="font-weight:bold;">Fproxy web interface</span> link in the image above, opens up Freenets main interface,
where peer-nodes are added and configuration for your Freenet node is done. When newly started, it also displays some helpful error
messages, as can be seen below.</p>
<img src="/image/install/11-FProxy_home.png"/><br/><br/><br/>
<p>The first thing you should do, is to change your node name. This can be done by either writing the node name directly in the main
window under the caption <span style="font-weight:bold;">Node name for darknet</span>, or by clicking the 
<span style="font-weight:bold;">Configuration</span> menu item and looking for the same caption there. When finished, press 
<span style="font-weight:bold;">Apply</span> to save the new settings.</p>