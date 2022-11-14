
 include <stdbool.h>

 bool solution(const char *string, const char *ending)
 {
     int j;
     int k;
     if(strlen(ending)==0)
       return true;
     for(int i=0;i<strlen(string);i++) {
       for(j=0,k=i;j<strlen(ending);j++) {
         if(string[k]==ending[j])
           k++;
         else
           break;
       }
       if(k==strlen(string) && j==strlen(ending))
         return true;
    }
     return false;
 }
 ?>

//Community 1 (both practical and clever):
#include <stdbool.h>
#include <string.h>

bool solution(const char *string, const char *ending)
{
    int len = strlen(string) - strlen(ending);
    return len < 0 ?false :strcmp(string + len, ending) == 0; //Pointer moving and comparing, clever job.
}

//Community 2:
#include <stdbool.h>
#include <string.h>

bool solution(const char *string, const char *ending) {
  const size_t lenString = strlen(string), lenEnding = strlen(ending);
  return lenEnding <= lenString && strcmp(string + (lenString - lenEnding), ending) == 0; //Almost the same as above.
}