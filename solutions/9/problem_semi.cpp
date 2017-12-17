#include <bits/stdc++.h>

using namespace std;

int solve(int n, vector < int > s, int d, int m){
    int result =0;int sum=0;
   // cout<<m<<" "<<d;
    for(int i=0;i<m;i++)
        sum+=s[i];
    int i=m;int counter=0;
    do
        {
        if(sum==d)
            result++;
        sum+=s[i++];
        sum-=s[counter++];
    }while(i<s.size());
    return result;
}

int main() {
    int n;
    cin >> n;
    vector<int> s(n);
    for(int s_i = 0; s_i < n; s_i++){
       cin >> s[s_i];
    }
    int d;
    int m;
    cin >> d >> m;
    int result = solve(n, s, d, m);
    cout << result << endl;
    return 0;
}
