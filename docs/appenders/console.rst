=====================
LoggerAppenderConsole
=====================

..  Licensed to the Apache Software Foundation (ASF) under one or more
    contributor license agreements. See the NOTICE file distributed with
    this work for additional information regarding copyright ownership.
    The ASF licenses this file to You under the Apache License, Version 2.0
    (the "License"); you may not use this file except in compliance with
    the License. You may obtain a copy of the License at
    
    http://www.apache.org/licenses/LICENSE-2.0
    
    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.


``LoggerAppenderConsole`` writes logging events to the ``php://stdout`` or the ``php://stderr`` 
stream, the former being the default target.

Layout
------

This appender requires a layout. If no layout is specified in configuration, LoggerLayoutSimple_ 
will be used by default.

.. _LoggerLayoutSimple ../layouts/simple.html

Parameters
----------

+-----------+--------+----------+---------+-------------------------------------------------------+
| Parameter | Type   | Required | Default | Description                                           |
+===========+========+==========+=========+=======================================================+
| target    | string | No       | stdout  | The stream to write to; either "stdout" or "stderr".  |
+-----------+--------+----------+---------+-------------------------------------------------------+

Examples
--------

This example shows how to configure ``LoggerAppenderConsole``.


				
				<div class="auto-tabs">
					<ul>
						<li>XML</li>
						<li>PHP</li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane">
<pre class="prettyprint linenums"><![CDATA[
<configuration xmlns="http://logging.apache.org/log4php/">
    <appender name="default" class="LoggerAppenderConsole">
        <layout class="LoggerLayoutSimple" />
    </appender>
    <root>
        <appender_ref ref="default" />
    </root>
</configuration>
]]></pre>
						</div>
				
						<div class="tab-pane">
<pre class="prettyprint linenums"><![CDATA[
array(
    'appenders' => array(
        'default' => array(
            'class' => 'LoggerAppenderConsole',
            'layout' => array(
                'class' => 'LoggerLayoutSimple',
            ),
        ),
    ),
    'rootLogger' => array(
        'appenders' => array('default'),
    ),
);
]]></pre>
						</div>
					</div>
				</div>
			</subsection>
		</section>
	</body>
</document>
