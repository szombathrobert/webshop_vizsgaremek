import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RagcsakComponent } from './ragcsak.component';

describe('RagcsakComponent', () => {
  let component: RagcsakComponent;
  let fixture: ComponentFixture<RagcsakComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ RagcsakComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(RagcsakComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
