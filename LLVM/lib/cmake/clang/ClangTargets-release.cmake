#----------------------------------------------------------------
# Generated CMake target import file for configuration "Release".
#----------------------------------------------------------------

# Commands may need to know the format version.
set(CMAKE_IMPORT_FILE_VERSION 1)

# Import target "libclang" for configuration "Release"
set_property(TARGET libclang APPEND PROPERTY IMPORTED_CONFIGURATIONS RELEASE)
set_target_properties(libclang PROPERTIES
  IMPORTED_IMPLIB_RELEASE "${_IMPORT_PREFIX}/lib/libclang.lib"
  IMPORTED_LOCATION_RELEASE "${_IMPORT_PREFIX}/bin/libclang.dll"
  )

list(APPEND _IMPORT_CHECK_TARGETS libclang )
list(APPEND _IMPORT_CHECK_FILES_FOR_libclang "${_IMPORT_PREFIX}/lib/libclang.lib" "${_IMPORT_PREFIX}/bin/libclang.dll" )

# Commands beyond this point should not need to know the version.
set(CMAKE_IMPORT_FILE_VERSION)
