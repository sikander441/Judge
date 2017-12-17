#include <map>
#include <set>
#include <list>
#include <cmath>
#include <ctime>
#include <deque>
#include <queue>
#include <stack>
#include <string>
#include <bitset>
#include <cstdio>
#include <limits>
#include <vector>
#include <climits>
#include <cstring>
#include <cstdlib>
#include <fstream>
#include <numeric>
#include <sstream>
#include <iostream>
#include <algorithm>
#include <unordered_map>

using namespace std;


int main(){
    string s;int c=0;map<int,int>arr;int counter=1;
    cin>>s;int l=s.length();
   // sort(s.begin(),s.end());

    for(int i=0;i<l;i++)
        {

         arr[s[i]-'a'+1]=1;
         
        
       
            while(s[i]==s[i+1])
                {
                counter++;
                arr[counter*(int)((s[i]-'a')+1)]=1;i++;
        }
        
            counter=1;
    }
 //sort(arr.begin(),arr.end());
    int n;
    cin>>n;
    while(n--)
        {
        int x;
        cin>>x;
        if (arr[x]==1)
            cout<<"Yes"<<endl;
        else
          cout<<"No"<<endl;
    }
    return 0;
}
