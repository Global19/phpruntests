$rtClassMap = array(
	'rtEnvironmentException'	 => 'configuration/exceptions/rtEnvironmentException.php',
	'rtMissingArgumentException'	 => 'configuration/exceptions/rtMissingArgumentException.php',
	'rtUnknownIniSettingException'	 => 'configuration/exceptions/rtUnknownIniSettingException.php',
	'rtUnknownOptionException'	 => 'configuration/exceptions/rtUnknownOptionException.php',
	'rtIfParallelHasPcntl'		 => 'configuration/preconditions/rtIfParallelHasPcntl.php',
	'rtIsExecutableSet'		 => 'configuration/preconditions/rtIsExecutableSet.php',
	'rtIsPcreLoaded'		 => 'configuration/preconditions/rtIsPcreLoaded.php',
	'rtIsProcOpenAvailable'		 => 'configuration/preconditions/rtIsProcOpenAvailable.php',
	'rtIsSafeModeDisabled'		 => 'configuration/preconditions/rtIsSafeModeDisabled.php',
	'rtIsTestFileSpecified'		 => 'configuration/preconditions/rtIsTestFileSpecified.php',
	'rtAddToCommandLine'		 => 'configuration/rtAddToCommandLine.php',
	'rtCommandLineOptions'		 => 'configuration/rtCommandLineOptions.php',
	'rtEnvironmentVariables'	 => 'configuration/rtEnvironmentVariables.php',
	'rtIniAsCommandLineArgs'	 => 'configuration/rtIniAsCommandLineArgs.php',
	'rtPreCondition'		 => 'configuration/rtPreCondition.php',
	'rtPreConditionList'		 => 'configuration/rtPreConditionList.php',
	'rtRuntestsConfiguration'	 => 'configuration/rtRuntestsConfiguration.php',
	'rtSetting'			 => 'configuration/rtSetting.php',
	'rtCurrentDirectorySetting'	 => 'configuration/settings/rtCurrentDirectorySetting.php',
	'rtLogFormatSetting'		 => 'configuration/settings/rtLogFormatSetting.php',
	'rtPhpCgiExecutableSetting'	 => 'configuration/settings/rtPhpCgiExecutableSetting.php',
	'rtPhpCommandLineArgSetting'	 => 'configuration/settings/rtPhpCommandLineArgSetting.php',
	'rtPhpExecutableSetting'	 => 'configuration/settings/rtPhpExecutableSetting.php',
	'rtTestDirectorySetting'	 => 'configuration/settings/rtTestDirectorySetting.php',
	'rtTestFileSetting'		 => 'configuration/settings/rtTestFileSetting.php',
	'rtWorkingDirectorySetting'	 => 'configuration/settings/rtWorkingDirectorySetting.php',
	'rtUnixConfiguration'		 => 'configuration/unix/rtUnixConfiguration.php',
	'rtUnixEnvironmentVariables'	 => 'configuration/unix/rtUnixEnvironmentVariables.php',
	'rtUnixPreConditionList'	 => 'configuration/unix/rtUnixPreConditionList.php',
	'rtUnixSettingList'		 => 'configuration/unix/rtUnixSettingList.php',
	'rtWinConfiguration'		 => 'configuration/windows/rtWinConfiguration.php',
	'rtWinEnvironmentVariables'	 => 'configuration/windows/rtWinEnvironmentVariables.php',
	'rtWinPreConditionList'		 => 'configuration/windows/rtWinPreConditionList.php',
	'rtWinSettingList'		 => 'configuration/windows/rtWinSettingList.php',
	'rtAutoload'			 => 'rtAutoload.php',
	'rtClassMap'			 => 'rtClassMap.php',
	'rtText'			 => 'rtText.php',
	'rtCodeRunnerException'		 => 'testcase/exceptions/rtCodeRunnerException.php',
	'rtTestOutputWriterList'	 => 'testcase/output/rtTestOutputWriterList.php',
	'rtTestOutputWriterXML'		 => 'testcase/output/rtTestOutputWriterXML.php',
	'rtHasMandatorySections'	 => 'testcase/preconditions/rtHasMandatorySections.php',
	'rtHasNoDuplicateSections'	 => 'testcase/preconditions/rtHasNoDuplicateSections.php',
	'rtIsSectionImplemented'	 => 'testcase/preconditions/rtIsSectionImplemented.php',
	'rtIsValidSectionName'		 => 'testcase/preconditions/rtIsValidSectionName.php',
	'rtIsPhpVersionCorrectTest'         =>  'configuration/preconditions/rtIsPhpVersionCorrectTest.php'.
	'rtPhpRunner'			 => 'testcase/rtPhpRunner.php',
	'rtPhpTest'			 => 'testcase/rtPhpTest.php',
	'rtPhpTestFile'			 => 'testcase/rtPhpTestFile.php',
	'rtTestConfiguration'		 => 'testcase/rtTestConfiguration.php',
	'rtTestDifference'		 => 'testcase/rtTestDifference.php',
	'rtTestOutputWriter'		 => 'testcase/rtTestOutputWriter.php',
	'rtTestPreCondition'		 => 'testcase/rtTestPreCondition.php',
	'rtTestResults'			 => 'testcase/rtTestResults.php',
	'rtArgsSection'			 => 'testcase/sections/configurationsections/rtArgsSection.php',
	'rtEnvSection'			 => 'testcase/sections/configurationsections/rtEnvSection.php',
	'rtIniSection'			 => 'testcase/sections/configurationsections/rtIniSection.php',
	'rtCleanSection'		 => 'testcase/sections/executablesections/rtCleanSection.php',
	'rtFileSection'			 => 'testcase/sections/executablesections/rtFileSection.php',
	'rtSkipIfSection'		 => 'testcase/sections/executablesections/rtSkipIfSection.php',
	'rtCreditsSection'		 => 'testcase/sections/informationsections/rtCreditsSection.php',
	'rtTestHeaderSection'		 => 'testcase/sections/informationsections/rtTestHeaderSection.php',
	'rtXfailSection'		 => 'testcase/sections/informationsections/rtXfailSection.php',
	'rtExpectFSection'		 => 'testcase/sections/outputsections/rtExpectFSection.php',
	'rtExpectRegexSection'		 => 'testcase/sections/outputsections/rtExpectRegexSection.php',
	'rtExpectSection'		 => 'testcase/sections/outputsections/rtExpectSection.php',
	'rtConfigurationSection'	 => 'testcase/sections/rtConfigurationSection.php',
	'rtExecutableSection'		 => 'testcase/sections/rtExecutableSection.php',
	'rtInformationSection'		 => 'testcase/sections/rtInformationSection.php',
	'rtOutputSection'		 => 'testcase/sections/rtOutputSection.php',
	'rtSection'			 => 'testcase/sections/rtSection.php',
	'rtPhpTestGroup'		 => 'testgroup/rtPhpTestGroup.php',
	'rtPhptFilterIterator'		 => 'testgroup/rtPhptFilterIterator.php',
	'rtDirectoryList'		 => 'testrun/rtDirectoryList.php',
	'rtPhpTestRun'			 => 'testrun/rtPhpTestRun.php',
	'rtPhptDirectoryFilterIterator'	 => 'testrun/rtPhptDirectoryFilterIterator.php',
	
);
