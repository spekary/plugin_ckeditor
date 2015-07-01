<?php

namespace QCubed\Plugin\QCKEditor;

require_once('../../../framework/includes/installer.inc.php');

//use Composer\Installer\PackageEvent;

class Install
{
	public static function postPackageInstall(PackageEvent $event)
	{
		$installedPackage = $event->getOperation()->getPackage();
		$strPackageName = $installedPackage->getName();
		echo 'Found ' . $strPackageName . "/n";
		\QCubed\Installer::ComposerPluginInstall($strPackageName);
	}

	public static function postPackageUpdate(PackageEvent $event)
	{
		$installedPackage = $event->getOperation()->getPackage();
		$strPackageName = $installedPackage->getName();
		echo 'Found ' . $strPackageName . "/n";
		\QCubed\Installer::ComposerPluginInstall($strPackageName);
	}

	public static function postPackageUninstall(PacakgeEvent $event)
	{
		$installedPackage = $event->getOperation()->getPackage();
		$strPackageName = $installedPackage->getName();
		echo 'Found ' . $strPackageName . "/n";
		\QCubed\Installer::ComposerPluginUninstall($strPackageName);
	}
}

